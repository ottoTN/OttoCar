<?php

/* compte/show.html.twig */
class __TwigTemplate_db8ddb0735df552a090f6901c394a7a460d297307462bd4612cc117ffdec535b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/show.html.twig", 1);
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
        $__internal_4eaab90ad4cf86e8c5c625bc52c7c28c25869f8706148d95c972ff506a686442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaab90ad4cf86e8c5c625bc52c7c28c25869f8706148d95c972ff506a686442->enter($__internal_4eaab90ad4cf86e8c5c625bc52c7c28c25869f8706148d95c972ff506a686442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $__internal_e8ca72e4a37ac9386192d34594533eaa9530199ff1d9b56d350f8cfb6190dbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ca72e4a37ac9386192d34594533eaa9530199ff1d9b56d350f8cfb6190dbb2->enter($__internal_e8ca72e4a37ac9386192d34594533eaa9530199ff1d9b56d350f8cfb6190dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eaab90ad4cf86e8c5c625bc52c7c28c25869f8706148d95c972ff506a686442->leave($__internal_4eaab90ad4cf86e8c5c625bc52c7c28c25869f8706148d95c972ff506a686442_prof);

        
        $__internal_e8ca72e4a37ac9386192d34594533eaa9530199ff1d9b56d350f8cfb6190dbb2->leave($__internal_e8ca72e4a37ac9386192d34594533eaa9530199ff1d9b56d350f8cfb6190dbb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44f77b8b176ce619dfcb700ec264c15eef60405a5c7c60ceaebfa9b7cce01018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f77b8b176ce619dfcb700ec264c15eef60405a5c7c60ceaebfa9b7cce01018->enter($__internal_44f77b8b176ce619dfcb700ec264c15eef60405a5c7c60ceaebfa9b7cce01018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d81797bfdedef919ad7e2e1cc2dc1a1e11b0a151539c0004cc9b2788b863101f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81797bfdedef919ad7e2e1cc2dc1a1e11b0a151539c0004cc9b2788b863101f->enter($__internal_d81797bfdedef919ad7e2e1cc2dc1a1e11b0a151539c0004cc9b2788b863101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Compte</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomprop</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "prenomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "telprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "adresseprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mailprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "modelevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "marquevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "immatvoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "cinprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d81797bfdedef919ad7e2e1cc2dc1a1e11b0a151539c0004cc9b2788b863101f->leave($__internal_d81797bfdedef919ad7e2e1cc2dc1a1e11b0a151539c0004cc9b2788b863101f_prof);

        
        $__internal_44f77b8b176ce619dfcb700ec264c15eef60405a5c7c60ceaebfa9b7cce01018->leave($__internal_44f77b8b176ce619dfcb700ec264c15eef60405a5c7c60ceaebfa9b7cce01018_prof);

    }

    public function getTemplateName()
    {
        return "compte/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  142 => 59,  136 => 56,  130 => 53,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Compte</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomprop</th>
                <td>{{ compte.nomprop }}</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>{{ compte.prenomprop }}</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>{{ compte.telprop }}</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>{{ compte.adresseprop }}</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>{{ compte.mailprop }}</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>{{ compte.modelevoit }}</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>{{ compte.marquevoit }}</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>{{ compte.immatvoit }}</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>{{ compte.cinprop }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ compte.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "compte/show.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\compte\\show.html.twig");
    }
}
