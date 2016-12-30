<?php

/* fournisseur/index.html.twig */
class __TwigTemplate_d4d28a0e1a22207614ef5c0ce184fafb3272a2f1a704f5fed3d18904d97e88be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a3ff0a9a34fc9024ddda2a20760cda9633b6cdb64da4660680365bcc3ceed28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3ff0a9a34fc9024ddda2a20760cda9633b6cdb64da4660680365bcc3ceed28->enter($__internal_9a3ff0a9a34fc9024ddda2a20760cda9633b6cdb64da4660680365bcc3ceed28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_b4246021b658765bdb60bf963f6b496fa6f799e532e6c0c59cc87ff077f7f66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4246021b658765bdb60bf963f6b496fa6f799e532e6c0c59cc87ff077f7f66b->enter($__internal_b4246021b658765bdb60bf963f6b496fa6f799e532e6c0c59cc87ff077f7f66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3ff0a9a34fc9024ddda2a20760cda9633b6cdb64da4660680365bcc3ceed28->leave($__internal_9a3ff0a9a34fc9024ddda2a20760cda9633b6cdb64da4660680365bcc3ceed28_prof);

        
        $__internal_b4246021b658765bdb60bf963f6b496fa6f799e532e6c0c59cc87ff077f7f66b->leave($__internal_b4246021b658765bdb60bf963f6b496fa6f799e532e6c0c59cc87ff077f7f66b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b2de41462cd6b21380373fe1124a7c20969233a17c204e9939d26ac19d7f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b2de41462cd6b21380373fe1124a7c20969233a17c204e9939d26ac19d7f51->enter($__internal_64b2de41462cd6b21380373fe1124a7c20969233a17c204e9939d26ac19d7f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d4b4b9fb3fde7376f54128d59ffd4ef7320cf0ceb60ff460eb142050834bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4b4b9fb3fde7376f54128d59ffd4ef7320cf0ceb60ff460eb142050834bff7->enter($__internal_0d4b4b9fb3fde7376f54128d59ffd4ef7320cf0ceb60ff460eb142050834bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nomfourn", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adressefourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "mailfourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telfourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_show", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_new");
        echo "\">Create a new fournisseur</a>
        </li>
    </ul>
";
        
        $__internal_0d4b4b9fb3fde7376f54128d59ffd4ef7320cf0ceb60ff460eb142050834bff7->leave($__internal_0d4b4b9fb3fde7376f54128d59ffd4ef7320cf0ceb60ff460eb142050834bff7_prof);

        
        $__internal_64b2de41462cd6b21380373fe1124a7c20969233a17c204e9939d26ac19d7f51->leave($__internal_64b2de41462cd6b21380373fe1124a7c20969233a17c204e9939d26ac19d7f51_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Fournisseurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fournisseur in fournisseurs %}
            <tr>
                <td><a href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\">{{ fournisseur.nomfourn }}</a></td>
                <td>{{ fournisseur.adressefourn }}</td>
                <td>{{ fournisseur.mailfourn }}</td>
                <td>{{ fournisseur.telfourn }}</td>
                <td>{{ fournisseur.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fournisseur_show', { 'id': fournisseur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_new') }}\">Create a new fournisseur</a>
        </li>
    </ul>
{% endblock %}
", "fournisseur/index.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}
