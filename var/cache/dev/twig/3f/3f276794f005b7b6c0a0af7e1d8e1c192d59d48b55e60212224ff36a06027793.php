<?php

/* piece/show.html.twig */
class __TwigTemplate_a353e0cc90742731b4bedcb3af4b77abfb55df55281c2af99195328261362b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/show.html.twig", 1);
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
        $__internal_84343defa05d6868221dd03624fdbbca0023fed6a4f9e2f660b206c78cb4e641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84343defa05d6868221dd03624fdbbca0023fed6a4f9e2f660b206c78cb4e641->enter($__internal_84343defa05d6868221dd03624fdbbca0023fed6a4f9e2f660b206c78cb4e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $__internal_7a1e934d66037f869138dab46500185c57b0e397a56c53c68708e42c003e364d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1e934d66037f869138dab46500185c57b0e397a56c53c68708e42c003e364d->enter($__internal_7a1e934d66037f869138dab46500185c57b0e397a56c53c68708e42c003e364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84343defa05d6868221dd03624fdbbca0023fed6a4f9e2f660b206c78cb4e641->leave($__internal_84343defa05d6868221dd03624fdbbca0023fed6a4f9e2f660b206c78cb4e641_prof);

        
        $__internal_7a1e934d66037f869138dab46500185c57b0e397a56c53c68708e42c003e364d->leave($__internal_7a1e934d66037f869138dab46500185c57b0e397a56c53c68708e42c003e364d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec3d8c61b9f4d620f8892a4fc896be9c1f9ad73011753650dd8ae573c205321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec3d8c61b9f4d620f8892a4fc896be9c1f9ad73011753650dd8ae573c205321->enter($__internal_dec3d8c61b9f4d620f8892a4fc896be9c1f9ad73011753650dd8ae573c205321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a6449073d590943d88640c1c1d8d2fc1548ad0dce84b6b3eb0a92a4ee6545ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6449073d590943d88640c1c1d8d2fc1548ad0dce84b6b3eb0a92a4ee6545ce->enter($__internal_0a6449073d590943d88640c1c1d8d2fc1548ad0dce84b6b3eb0a92a4ee6545ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Refpiece</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "refpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marquepiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "marquepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixpiece</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "prixpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "typepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libellepiece</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "libellepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute((isset($context["piece"]) ? $context["piece"] : $this->getContext($context, "piece")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a6449073d590943d88640c1c1d8d2fc1548ad0dce84b6b3eb0a92a4ee6545ce->leave($__internal_0a6449073d590943d88640c1c1d8d2fc1548ad0dce84b6b3eb0a92a4ee6545ce_prof);

        
        $__internal_dec3d8c61b9f4d620f8892a4fc896be9c1f9ad73011753650dd8ae573c205321->leave($__internal_dec3d8c61b9f4d620f8892a4fc896be9c1f9ad73011753650dd8ae573c205321_prof);

    }

    public function getTemplateName()
    {
        return "piece/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Piece</h1>

    <table>
        <tbody>
            <tr>
                <th>Refpiece</th>
                <td>{{ piece.refpiece }}</td>
            </tr>
            <tr>
                <th>Marquepiece</th>
                <td>{{ piece.marquepiece }}</td>
            </tr>
            <tr>
                <th>Prixpiece</th>
                <td>{{ piece.prixpiece }}</td>
            </tr>
            <tr>
                <th>Typepiece</th>
                <td>{{ piece.typepiece }}</td>
            </tr>
            <tr>
                <th>Libellepiece</th>
                <td>{{ piece.libellepiece }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ piece.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "piece/show.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\piece\\show.html.twig");
    }
}
