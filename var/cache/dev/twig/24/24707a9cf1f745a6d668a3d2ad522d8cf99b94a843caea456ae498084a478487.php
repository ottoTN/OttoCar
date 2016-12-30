<?php

/* fournisseur/index.html.twig */
class __TwigTemplate_fc52e4678d970ddf898083a117c02a82c1775fabdf8b769db5a2438ba0390f4e extends Twig_Template
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
        $__internal_b96370e53e41bb2f5b8b4babdb738208eba14630b74229b4ffcb79487d844654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96370e53e41bb2f5b8b4babdb738208eba14630b74229b4ffcb79487d844654->enter($__internal_b96370e53e41bb2f5b8b4babdb738208eba14630b74229b4ffcb79487d844654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_ba955dcc54b3d19fd5296d50c9aa95f557fab77bb3f646c586dbdb2cd3b6aa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba955dcc54b3d19fd5296d50c9aa95f557fab77bb3f646c586dbdb2cd3b6aa18->enter($__internal_ba955dcc54b3d19fd5296d50c9aa95f557fab77bb3f646c586dbdb2cd3b6aa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96370e53e41bb2f5b8b4babdb738208eba14630b74229b4ffcb79487d844654->leave($__internal_b96370e53e41bb2f5b8b4babdb738208eba14630b74229b4ffcb79487d844654_prof);

        
        $__internal_ba955dcc54b3d19fd5296d50c9aa95f557fab77bb3f646c586dbdb2cd3b6aa18->leave($__internal_ba955dcc54b3d19fd5296d50c9aa95f557fab77bb3f646c586dbdb2cd3b6aa18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c839503d0a2c0622c69fb350baae7a7dba074b90832e01988540d5c6e40d43bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c839503d0a2c0622c69fb350baae7a7dba074b90832e01988540d5c6e40d43bc->enter($__internal_c839503d0a2c0622c69fb350baae7a7dba074b90832e01988540d5c6e40d43bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cedec583a51beebc0668d572f48b4683b14ebaee145d77681a99c67a090ec7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedec583a51beebc0668d572f48b4683b14ebaee145d77681a99c67a090ec7ae->enter($__internal_cedec583a51beebc0668d572f48b4683b14ebaee145d77681a99c67a090ec7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cedec583a51beebc0668d572f48b4683b14ebaee145d77681a99c67a090ec7ae->leave($__internal_cedec583a51beebc0668d572f48b4683b14ebaee145d77681a99c67a090ec7ae_prof);

        
        $__internal_c839503d0a2c0622c69fb350baae7a7dba074b90832e01988540d5c6e40d43bc->leave($__internal_c839503d0a2c0622c69fb350baae7a7dba074b90832e01988540d5c6e40d43bc_prof);

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
", "fournisseur/index.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}
