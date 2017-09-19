<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ac20f75799f38bd1c77e468d91d91e25a29aa28fdb058d64c64f6311bdd9e21b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf4993404c13872eb3ad75511d285b960ec0cde8a9cbaafb66bc7aba3320d606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4993404c13872eb3ad75511d285b960ec0cde8a9cbaafb66bc7aba3320d606->enter($__internal_bf4993404c13872eb3ad75511d285b960ec0cde8a9cbaafb66bc7aba3320d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0f1206b97b46bcb992f129f134818abb4650d00a71873363bc1a09ad863d8295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1206b97b46bcb992f129f134818abb4650d00a71873363bc1a09ad863d8295->enter($__internal_0f1206b97b46bcb992f129f134818abb4650d00a71873363bc1a09ad863d8295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bf4993404c13872eb3ad75511d285b960ec0cde8a9cbaafb66bc7aba3320d606->leave($__internal_bf4993404c13872eb3ad75511d285b960ec0cde8a9cbaafb66bc7aba3320d606_prof);

        
        $__internal_0f1206b97b46bcb992f129f134818abb4650d00a71873363bc1a09ad863d8295->leave($__internal_0f1206b97b46bcb992f129f134818abb4650d00a71873363bc1a09ad863d8295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
